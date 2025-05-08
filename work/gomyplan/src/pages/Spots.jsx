import styled from "styled-components";

// react-bootstrap
import Card from "react-bootstrap/Card";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import CustomCalendar from "../components/CustomCalendar";
import BigButton from "../components/BigButton";

// img
import SpotsImg from "../assets/img/spots_main.jpg";
import SpotsThum1 from "../assets/img/spots_img1.jpg";
import SpotsThum2 from "../assets/img/spots_img2.jpg";
import SpotsThum3 from "../assets/img/spots_img3.jpg";
import SpotsThum4 from "../assets/img/spots_img4.jpg";

// style
const SpotsPhotoBox = styled.div`
  position: relative;
  margin-bottom: 30px;
`;

const SpotsPhotoImg = styled.div`
  position: relative;
  width: 100%;
  aspect-ratio: 1 / 0.5384615;
  display: flex;
  overflow: hidden;

  img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  &::after {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.4));
  }
`;

const SpotsPhotoTitle = styled.div`
  position: absolute;
  left: 0;
  bottom: 0;
  padding: 10px 20px;
  text-align: right;
  width: 100%;
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-white);
`;

const SpotsContent = styled.div`
  padding: 0 20px;
  margin-bottom: 50px;
`;

const SpotsTxtBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 40px;
  margin-top: 30px;
`;

const SpotsTitBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 10px;

  &.cardver {
    gap: 14px;
  }
`;

const SpotsTxtTitle = styled.div`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const SpotsTxtDesc = styled.div`
  font-weight: 400;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);
  
  .darkMode & {
    color: var(--color-border);
  }
`;

const Spots = () => {
  return (
    <>
      {/* Header */}
      <Header type="title" title="Spots" />

      {/* contents */}
      <PageContainer padding="p-0">
        <PageContent>
          <SpotsPhotoBox>
            <SpotsPhotoImg>
              <img src={SpotsImg} />
            </SpotsPhotoImg>
            <SpotsPhotoTitle>Hong Kong</SpotsPhotoTitle>
          </SpotsPhotoBox>

          <SpotsContent>
            <BigButton>7 Plans (Explore All ➙)</BigButton>

            <SpotsTxtBox>
              <SpotsTitBox>
                <SpotsTxtTitle>Plan Creators</SpotsTxtTitle>
                <SpotsTxtDesc>n/a</SpotsTxtDesc>
              </SpotsTitBox>

              <SpotsTitBox>
                <SpotsTxtTitle>Popular Spots</SpotsTxtTitle>
                <SpotsTxtDesc>n/a</SpotsTxtDesc>
              </SpotsTitBox>

              <SpotsTitBox className="cardver">
                <SpotsTxtTitle>Recommended Plan</SpotsTxtTitle>
                <CustomCalendar />
                <div className="cardList">
                  <Card>
                    <Card.Img src={SpotsThum1} />
                    <Card.Body>
                      <div className="card_top">
                        {/* <div className="card_time">
                        <span className="icon"></span>
                        <span className="txt">19:00</span>
                      </div> */}
                        <div className="card_badge">Hong Kong</div>
                      </div>
                      <div className="card_content">
                        <Card.Title>Hong Kong Smart Plan (2 Days 3 Nights)</Card.Title>
                        <Card.Text>Temple Street, Peak Tram, Victoria Peak, Symphony of Lights</Card.Text>
                      </div>
                      <div className="infobox">
                        <div className="left">
                          <BigButton>Details</BigButton>
                        </div>
                        <div className="right">
                          <p className="price_wrap">
                            Per person
                            <span className="price">USD $50</span>
                          </p>
                          <p className="price_desc">*Total up to 4 people*</p>
                        </div>
                      </div>
                    </Card.Body>
                  </Card>
                  <Card>
                    <Card.Img src={SpotsThum2} />
                    <Card.Body>
                      <div className="card_top">
                        <div className="card_badge">Hong Kong</div>
                      </div>
                      <div className="card_content">
                        <Card.Title>Night Goblin Plan HK</Card.Title>
                        <Card.Text>Victoria Peak, Repulse Bay</Card.Text>
                      </div>
                      <div className="infobox">
                        <div className="left">
                          <BigButton>Details</BigButton>
                        </div>
                        <div className="right">
                          <p className="price_wrap">
                            Per person
                            <span className="price">USD $170</span>
                          </p>
                          <p className="price_desc">*Total up to 1 people*</p>
                        </div>
                      </div>
                    </Card.Body>
                  </Card>
                  <Card>
                    <Card.Img src={SpotsThum3} />
                    <Card.Body>
                      <div className="card_top">
                        <div className="card_badge">Custom</div>
                      </div>
                      <div className="card_content">
                        <Card.Title>4 Day 3 Night Modern Family Package</Card.Title>
                        <Card.Text>Victoria Peak, Central-Mid-Levels escalator, Repulse Bay</Card.Text>
                      </div>
                      <div className="infobox">
                        <div className="left">
                          <BigButton>Details</BigButton>
                        </div>
                        <div className="right">
                          <p className="price_wrap">
                            Per person
                            <span className="price">USD $50</span>
                          </p>
                          <p className="price_desc">*Total up to 4 people*</p>
                        </div>
                      </div>
                    </Card.Body>
                  </Card>
                  <Card>
                    <Card.Img src={SpotsThum4} />
                    <Card.Body>
                      <div className="card_top">
                        <div className="card_badge">Custom</div>
                      </div>
                      <div className="card_content">
                        <Card.Title>Hong Kong Macau Bus Tour</Card.Title>
                        <Card.Text>Victoria Peak, Central-Mid-Levels escalator, Repulse Bay</Card.Text>
                      </div>
                      <div className="infobox">
                        <div className="left">
                          <BigButton>Details</BigButton>
                        </div>
                        <div className="right">
                          <p className="price_wrap">
                            Per person
                            <span className="price">USD $100</span>
                          </p>
                          <p className="price_desc">*Total up to 1 people*</p>
                        </div>
                      </div>
                    </Card.Body>
                  </Card>
                </div>
              </SpotsTitBox>
            </SpotsTxtBox>
          </SpotsContent>
        </PageContent>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />
    </>
  );
};

export default Spots;
