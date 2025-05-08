import { useState } from "react";
import { Link } from "react-router-dom";
import styled from "styled-components";

// react-bootstrap
import Card from "react-bootstrap/Card";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import PageBtnbox from "../components/PageBtnbox";

// img
import PlanThum1 from "../assets/img/plan_thum1.png";
import PlanThum2 from "../assets/img/plan_thum2.png";

// style
const PalnTabs = styled.div`
  border-bottom: 0;
  border-radius: 10px;
  width: 100%;
  background: var(--color-input);
  margin-bottom: 18px;
  display: flex;
  transition: var(--transition);

  .darkMode & {
    background: var(--color-darkgray);
  }
`;

const PalnTab = styled(Link)`
  padding: 12px 4px;
  height: 42px;
  font-family: var(--font-family);
  font-weight: 600;
  font-size: 14px;
  line-height: 130%;
  text-align: center;
  color: var(--color-default);
  margin: 0;
  border-radius: 10px;
  width: 50%;
  transition: var(--transition);

  &.active {
    background: var(--color-default);
    color: var(--color-input);
  }

  &.active:nth-child(1) {
    box-shadow: 4px 0 10px 0 rgba(66, 169, 236, 0.3);
  }

  &.active:nth-child(2) {
    box-shadow: -4px 0 10px 0 rgba(66, 169, 236, 0.3);
  }

  .darkMode & {
    color: var(--color-border);
  }

  .darkMode &.active {
    background: var(--color-darknavy);
    color: var(--color-white);
  }
`;

const TabContent = styled.div`
  flex: 1;
  display: flex;
  flex-direction: column;
`;

const CardList = styled.div`
  border-bottom: 1px solid var(--color-border);
  border-top: 1px solid var(--color-border);
  flex: 1;
  display: flex;
  flex-direction: column;
  padding: 20px 0;
  transition: var(--transition);

  .darkMode & {
    border-bottom: 1px solid var(--color-gray);
    border-top: 1px solid var(--color-gray);
  }
`;

const AddPlan = styled(Link)`
  border: 1px solid var(--color-border2);
  border-radius: 10px;
  width: 100%;
  height: 200px;
  background: var(--color-white);
  margin-bottom: 30px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 6px;
  transition: var(--transition);

  .darkMode & {
    border: 1px solid var(--color-darkgray);
    background: var(--color-darkgray2);
  }
`;

const AddPlanICon = styled.div`
  background: url(/src/assets/img/icon_plus.png) no-repeat center/contain;
  width: 40px;
  aspect-ratio: 1 / 1;
  display: block;
`;

const AddPlanTXT = styled.div`
  font-family: var(--second-family);
  font-weight: 500;
  font-size: 18px;
  line-height: 130%;
  text-align: center;
  color: var(--color-main);
  opacity: 0.8;
`;

const NoText = styled.p`
  font-family: var(--second-family);
  font-weight: 500;
  font-size: 18px;
  line-height: 130%;
  text-align: center;
  color: var(--color-gray);
  width: 100%;
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0.5;
  min-height: 300px;
  transition: var(--transition);

  .darkMode & {
    color: var(--color-white);
  }
`;

const CreateLink = styled(Link)`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  text-decoration: underline;
  text-align: center;
  color: var(--color-default);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-input);
  }
`;

const PrivatePlans = () => {
  // 임시 추가
  const [planShow, setPlanShow] = useState(false);

  const PlanClose = () => {
    setPlanShow(false);
  };
  const PlanShow = () => {
    setPlanShow(true);
  };

  return (
    <>
      {/* Header */}
      <Header type="title" title="Create a Plan" />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <PalnTabs>
            <PalnTab className="active">Private Plans</PalnTab>
            <PalnTab to="/publishedPlans">Published Plans</PalnTab>
          </PalnTabs>
          <TabContent>
            <AddPlan to="#none" onClick={PlanShow}>
              <AddPlanICon className="icon plus"></AddPlanICon>
              <AddPlanTXT className="txt">Create a Plan</AddPlanTXT>
            </AddPlan>
            {!planShow ? (
              <CardList>
                <NoText>No registered plans.</NoText>
              </CardList>
            ) : (
              <CardList onClick={PlanClose} className="cardList3">
                <Card>
                  <Card.Img src={PlanThum1} />
                  <Card.Body>
                    <div className="card_content">
                      <Card.Text>Plan no. 230321HK_SMPK_02001</Card.Text>
                      <Card.Title>Hong Kong (3 Days, 2 Nights)</Card.Title>
                      <p className="price">USD $400~</p>
                    </div>
                    <div className="infobox">
                      <p className="info_txt">Published on : 2023-09-01 17:11</p>
                      <p className="info_txt">Modified on : 2023-09-01 17:55</p>
                    </div>
                  </Card.Body>
                </Card>
                <Card>
                  <Card.Img src={PlanThum2} />
                  <Card.Body>
                    <div className="card_content">
                      <Card.Text>Plan no. 230321HK_SMPK_02002</Card.Text>
                      <Card.Title>Macau (3 Days, 2 Nights)</Card.Title>
                      <p className="price">USD $400~</p>
                    </div>
                    <div className="infobox">
                      <p className="info_txt">Published on : 2023-09-11 18:23</p>
                      <p className="info_txt">Modified on : 2023-09-11 18:45</p>
                    </div>
                  </Card.Body>
                </Card>
              </CardList>
            )}
          </TabContent>
        </PageContent>
        <PageBtnbox>
          <CreateLink to="/plangPolicies">Create a plan and monetize now.</CreateLink>
        </PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />
    </>
  );
};

export default PrivatePlans;
