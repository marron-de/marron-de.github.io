import styled from "styled-components";
import { Link } from "react-router-dom";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";

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

const PlanList = styled.div`
  display: flex;
  flex-direction: column;
  gap: 20px;
  margin-bottom: 40px;
`;

const PlanItem = styled.div`
  display: flex;
  align-items: flex-start;
  flex-direction: column;
  border-bottom: 1px solid var(--color-border);
  padding-bottom: 26px;
  transition: var(--transition);

  .darkMode & {
    border-bottom: 1px solid var(--color-gray);
  }
`;

const PlanSubTitle = styled.p`
  width: 100%;
  font-weight: 400;
  font-size: 10px;
  line-height: 130%;
  color: var(--color-darkgray);
  margin-bottom: 4px;
  transition: var(--transition);

  .darkMode & {
    color: var(--color-gray);
  }
`;

const PlanTitle = styled.p`
  width: 100%;
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  margin-bottom: 10px;
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const PlanPrice = styled.p`
  width: 100%;
  font-family: var(--second-family);
  font-weight: 700;
  font-size: 18px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const PlanInfoBox = styled.div`
  width: 100%;
  border-radius: 10px;
  padding: 14px;
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-white);
  display: flex;
  flex-direction: column;
  gap: 4px;
  margin-top: 10px;
  transition: var(--transition);

  & + button {
    margin-top: 10px;
  }

  .darkMode & {
    background: var(--color-darkgray2);
  }
`;

const PlanInfoItem = styled.div`
  display: flex;
  align-items: center;
`;

const PlanInfoTitle = styled.p`
  width: 80px;
  font-weight: 500;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-default);
  text-transform: capitalize;
  transition: var(--transition);

  .darkMode & {
    color: var(--color-point);
  }
`;

const PlanInfoDesc = styled.p`
  flex: 1;
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-gray);
  }
`;

const DeleteButton = styled.button`
  box-shadow: 0 0 0px 3.5px rgba(255, 206, 206, 0.5);
  border-radius: 6px;
  padding: 4px 12px;
  background: #e60000;
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 12px;
  line-height: 130%;
  text-align: center;
  color: var(--color-white);
  transition: var(--transition);

  .darkMode & {
    box-shadow: none;
  }
`;

const ReservationPlans = () => {
  return (
    <>
      {/* Header */}
      <Header type="title" title="Plan Manager" />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <PalnTabs>
            <PalnTab to="/planManager">Plan Drafts</PalnTab>
            <PalnTab className="active">Reservation Plans</PalnTab>
          </PalnTabs>
          <TabContent>
            <PlanList>
              <PlanItem>
                <PlanSubTitle>Plan no. 240611MCBB_13010001</PlanSubTitle>
                <PlanTitle>4 Day 3 Night Modern Family Package</PlanTitle>
                <PlanPrice>US $480</PlanPrice>
                <PlanInfoBox>
                  <PlanInfoItem>
                    <PlanInfoTitle>date</PlanInfoTitle>
                    <PlanInfoDesc>2024-06-04</PlanInfoDesc>
                  </PlanInfoItem>
                  <PlanInfoItem>
                    <PlanInfoTitle>Adults</PlanInfoTitle>
                    <PlanInfoDesc>2</PlanInfoDesc>
                  </PlanInfoItem>
                  <PlanInfoItem>
                    <PlanInfoTitle>Children</PlanInfoTitle>
                    <PlanInfoDesc>2</PlanInfoDesc>
                  </PlanInfoItem>
                </PlanInfoBox>
                <DeleteButton>Delete</DeleteButton>
              </PlanItem>
              <PlanItem>
                <PlanSubTitle>Plan no. 240611MCBB_13010001</PlanSubTitle>
                <PlanTitle>4 Day 3 Night Modern Family Package</PlanTitle>
                <PlanPrice>US $480</PlanPrice>
                <PlanInfoBox>
                  <PlanInfoItem>
                    <PlanInfoTitle>date</PlanInfoTitle>
                    <PlanInfoDesc>2024-06-04</PlanInfoDesc>
                  </PlanInfoItem>
                  <PlanInfoItem>
                    <PlanInfoTitle>Adults</PlanInfoTitle>
                    <PlanInfoDesc>2</PlanInfoDesc>
                  </PlanInfoItem>
                  <PlanInfoItem>
                    <PlanInfoTitle>Children</PlanInfoTitle>
                    <PlanInfoDesc>2</PlanInfoDesc>
                  </PlanInfoItem>
                </PlanInfoBox>
                <DeleteButton>Delete</DeleteButton>
              </PlanItem>
              <PlanItem>
                <PlanSubTitle>Plan no. 240611MCBB_13010001</PlanSubTitle>
                <PlanTitle>4 Day 3 Night Modern Family Package</PlanTitle>
                <PlanPrice>US $480</PlanPrice>
                <PlanInfoBox>
                  <PlanInfoItem>
                    <PlanInfoTitle>date</PlanInfoTitle>
                    <PlanInfoDesc>2024-06-04</PlanInfoDesc>
                  </PlanInfoItem>
                  <PlanInfoItem>
                    <PlanInfoTitle>Adults</PlanInfoTitle>
                    <PlanInfoDesc>2</PlanInfoDesc>
                  </PlanInfoItem>
                  <PlanInfoItem>
                    <PlanInfoTitle>Children</PlanInfoTitle>
                    <PlanInfoDesc>2</PlanInfoDesc>
                  </PlanInfoItem>
                </PlanInfoBox>
                <DeleteButton>Delete</DeleteButton>
              </PlanItem>
              <PlanItem>
                <PlanSubTitle>Plan no. 240611MCBB_13010001</PlanSubTitle>
                <PlanTitle>4 Day 3 Night Modern Family Package</PlanTitle>
                <PlanPrice>US $480</PlanPrice>
                <PlanInfoBox>
                  <PlanInfoItem>
                    <PlanInfoTitle>date</PlanInfoTitle>
                    <PlanInfoDesc>2024-06-04</PlanInfoDesc>
                  </PlanInfoItem>
                  <PlanInfoItem>
                    <PlanInfoTitle>Adults</PlanInfoTitle>
                    <PlanInfoDesc>2</PlanInfoDesc>
                  </PlanInfoItem>
                  <PlanInfoItem>
                    <PlanInfoTitle>Children</PlanInfoTitle>
                    <PlanInfoDesc>2</PlanInfoDesc>
                  </PlanInfoItem>
                </PlanInfoBox>
                <DeleteButton>Delete</DeleteButton>
              </PlanItem>
              <PlanItem>
                <PlanSubTitle>Plan no. 240611MCBB_13010001</PlanSubTitle>
                <PlanTitle>4 Day 3 Night Modern Family Package</PlanTitle>
                <PlanPrice>US $480</PlanPrice>
                <PlanInfoBox>
                  <PlanInfoItem>
                    <PlanInfoTitle>date</PlanInfoTitle>
                    <PlanInfoDesc>2024-06-04</PlanInfoDesc>
                  </PlanInfoItem>
                  <PlanInfoItem>
                    <PlanInfoTitle>Adults</PlanInfoTitle>
                    <PlanInfoDesc>2</PlanInfoDesc>
                  </PlanInfoItem>
                  <PlanInfoItem>
                    <PlanInfoTitle>Children</PlanInfoTitle>
                    <PlanInfoDesc>2</PlanInfoDesc>
                  </PlanInfoItem>
                </PlanInfoBox>
                <DeleteButton>Delete</DeleteButton>
              </PlanItem>
            </PlanList>
          </TabContent>
        </PageContent>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav active="plans" />
    </>
  );
};

export default ReservationPlans;
